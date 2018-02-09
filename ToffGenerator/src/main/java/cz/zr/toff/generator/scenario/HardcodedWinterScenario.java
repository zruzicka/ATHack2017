/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.generator.scenario;

import java.text.ParseException;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import cz.zr.toff.generator.Utils;
import cz.zr.toff.generator.model.Definition;
import cz.zr.toff.generator.model.FixedDateDefinitions;
import cz.zr.toff.generator.model.Model;
import cz.zr.toff.generator.model.QueryContainer;

public class HardcodedWinterScenario implements Scenario {

    @Override
	public List<QueryContainer> getModels() {
        List<QueryContainer> models = new ArrayList<QueryContainer>();
        List<Definition> definitions = new ArrayList<Definition>();
        try {
        	String[] from = new String[] {"VIE", "PRG"};
        	String[] to = new String[] {"tela", "han", "sgn", "dad", "cmba", "mct", "sll", "ohs", "cgki", "dps"};
        	Date[] start = new Date[] {Utils.DATE.parse("20171217"), Utils.DATE.parse("20171218"), Utils.DATE.parse("20171220")};
        	Date[] end = new Date[] {Utils.DATE.parse("20180102"), Utils.DATE.parse("20180104"), Utils.DATE.parse("20180107")};
        	definitions.add(new FixedDateDefinitions(from, to, start, end));
        } catch (ParseException e) {
            e.printStackTrace();
        }

        for (Definition definition : definitions) {
            List<Model> definitionModels = definition.getModels();
            for (Model model : definitionModels) {
                models.add(new QueryContainer(model));
            }
        }
        return models;
    }

}
