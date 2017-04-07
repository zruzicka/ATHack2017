/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.generator.model;

public class QueryContainer {

    private final String id;
    private final Model model;
    private String url;

    public QueryContainer(Model model) {
        super();
        this.id = model.getFrom() +"-"+ model.getTo() +"-"+ model.getStart();
        this.model = model;
    }

    public String getId() {
        return id;
    }

    public Model getModel() {
        return model;
    }

    public String getUrl() {
        return url;
    }

    public void setUrl(String url) {
        this.url = url;
    }

}
