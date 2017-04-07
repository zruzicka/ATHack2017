/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.generator.query;

import java.util.Date;

import cz.zr.toff.generator.model.Model;
import cz.zr.toff.generator.model.QueryContainer;

public class ScriptQuery implements Query<QueryContainer> {

    private final Date scriptDate;

    public ScriptQuery() {
        scriptDate = new Date();
    }

    public String getQuery(QueryContainer input) {
        StringBuilder sb = new StringBuilder();
        sb.append("curl ");
        sb.append(input.getUrl());
        sb.append(" -X GET -H \"Accept: application/xml\"");
        sb.append(" > ");
        sb.append(input.getId());
        sb.append("_gen");
        sb.append(input.getStartDate());
        sb.append(".xml");
        return sb.toString();
    }
    
    public String getDefinition(QueryContainer input) {
        StringBuilder sb = new StringBuilder();
        sb.append("echo ");
        Model model = input.getModel();
        sb.append(model.getFrom());
        addDefinitionSeparator(sb);
        sb.append(model.getTo());
        sb.append(" > def_");
        sb.append(input.getId()+".xml");
        return sb.toString();
    }
    
    private void addDefinitionSeparator(StringBuilder sb) {
        sb.append(";");
    }

}
