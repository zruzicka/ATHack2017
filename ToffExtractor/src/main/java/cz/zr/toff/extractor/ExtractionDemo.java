/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.extractor;

import java.io.File;
import java.io.FilenameFilter;
import java.io.IOException;
import java.nio.charset.Charset;
import java.nio.file.Files;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.HashSet;
import java.util.List;
import java.util.Set;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;

import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

import cz.zr.toff.extractor.model.Result;

/**
 * XML data extraction demo.
 * 
 * @author ZRuzicka
 */
public class ExtractionDemo {
    // TODO Needs decomposition.

    class StartsWithFilter implements FilenameFilter {
        private final String prefix;

        public StartsWithFilter(String prefix) {
            super();
            this.prefix = prefix;
        }

        public boolean accept(File dir, String name) {
            return name.startsWith(prefix);
        }
    }

    public static void main(String[] args) {
        new ExtractionDemo().parse();
    }

    private void parse() {

        File root = new File("e:\\ATHack2017\\SkyScanner\\v2\\");

        File[] listFiles = root.listFiles(new StartsWithFilter("def"));
        for (File file : listFiles) {
            System.out.println(file.getName());

            try {
                List<String> lines = Files.readAllLines(file.toPath(), Charset.forName("UTF-8"));
                String[] split = lines.get(0).split(";");
                String from = split[0], to = split[1];

                // Loads data files with pattern "from-to*"
                File[] definedFiles = root.listFiles(new StartsWithFilter(from + "-" + to));
                for (File file2 : definedFiles) {
                    System.out.println("Data source: " + file2.getName());

                    List<Result> results = getResultsFor(file2, from, to);
                    Set<Date> uniqueDates = new HashSet();

                    for (Result result : results) {
                        // System.out.println(result);
                        Date start = result.getStart();
                        if (start != null) {
                            if (!uniqueDates.contains(start)) {
                                uniqueDates.add(start);
                                String itemArray = "array(\"" + DATE.format(start) + "\", " + result.getPrice() + "),";
                                System.out.println(itemArray);
                            }
                        }
                    }
                    System.out.println("-----");
                }
            } catch (IOException e) {
                e.printStackTrace();
            }

        }

    }

    private List<Result> getResultsFor(File xmlFile, String from, String to) {
        List<Result> results = new ArrayList();
        try {
            DocumentBuilderFactory dbFactory = DocumentBuilderFactory.newInstance();
            DocumentBuilder dBuilder = dbFactory.newDocumentBuilder();
            Document doc = dBuilder.parse(xmlFile);

            doc.getDocumentElement().normalize();

            NodeList nList = doc.getElementsByTagName("QuoteDto");
            for (int temp = 0; temp < nList.getLength(); temp++) {
                Node nNode = nList.item(temp);
                if (nNode.getNodeType() == Node.ELEMENT_NODE) {
                    Element eElement = (Element) nNode;
                    int QuoteId = getInt(eElement, "QuoteId");
                    int price = getInt(eElement, "MinPrice");
                    int carrierId = getInt(eElement, "MinPrice");
                    String directStr = get(eElement, "Direct");
                    String outboundDateStr = null;
                    String inboundDateStr = null;
                    Node subItem = getElement(eElement, "OutboundLeg");
                    if (subItem != null && subItem.getNodeType() == Node.ELEMENT_NODE) {
                        Element subElement = (Element) subItem;
                        outboundDateStr = get(subElement, "DepartureDate");
                    }
                    subItem = getElement(eElement, "InboundLeg");
                    if (subItem != null && subItem.getNodeType() == Node.ELEMENT_NODE) {
                        Element subElement = (Element) subItem;
                        inboundDateStr = get(subElement, "DepartureDate");
                    }
                    Result result = new Result(from, to, price, carrierId, getDate(outboundDateStr),
                            getDate(inboundDateStr));
                    results.add(result);
                }
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
        return results;
    }

    private NodeList getElements(Element eElement, String key) {
        return eElement.getElementsByTagName(key);
    }

    private Node getElement(Element eElement, String key) {
        return (Node) getElements(eElement, key).item(0);
    }

    private String get(Element eElement, String key) {
        return eElement.getElementsByTagName(key).item(0).getTextContent();
    }

    private int getInt(Element eElement, String key) {
        return Integer.parseInt(eElement.getElementsByTagName(key).item(0).getTextContent());
    }

    public static final SimpleDateFormat DATE = new SimpleDateFormat("yyyy-MM-dd");

    private Date getDate(String dateStr) {
        if (dateStr != null) {
            try {
                return DATE.parse(dateStr);
            } catch (ParseException e) {
                e.printStackTrace();
            }
        }
        return null;
    }
}
