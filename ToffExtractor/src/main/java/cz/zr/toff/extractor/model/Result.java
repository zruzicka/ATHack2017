/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.extractor.model;

import java.util.Date;

public class Result implements Comparable<Result> {

    private final String from;
    private final String to;
    private final int price;
    private final int carrierId;
    private Date start;
    private Date end;

    public Result(String from, String to, int price, int carrierId, Date start, Date end) {
        super();
        this.from = from;
        this.to = to;
        this.price = price;
        this.carrierId = carrierId;
        this.start = start;
        this.end = end;
    }

    public String getFrom() {
        return from;
    }

    public String getTo() {
        return to;
    }

    public int getPrice() {
        return price;
    }

    public Date getStart() {
        return start;
    }

    @Override
    public String toString() {
        return "Result [from=" + from + ", to=" + to + ", price=" + price + ", carrierId=" + carrierId + ", start="
                + start + ", end=" + end + "]";
    }

    @Override
    public int compareTo(Result o) {
    	return this.price - o.price;
    }
}
