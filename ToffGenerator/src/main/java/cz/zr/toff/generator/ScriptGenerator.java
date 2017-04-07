/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.generator;

import cz.zr.toff.generator.model.QueryContainer;
import cz.zr.toff.generator.query.RESTQuery;
import cz.zr.toff.generator.query.ScriptQuery;
import cz.zr.toff.generator.scenario.Scenario;

public class ScriptGenerator {
    
    public String generate(Scenario scenario) {
        StringBuilder sb = new StringBuilder();
        ScriptQuery scriptQuery = new ScriptQuery();
        RESTQuery restQuery = new RESTQuery();
        for (QueryContainer container : scenario.getModels()) {
            String restURL = restQuery.getQuery(container.getModel());
            container.setUrl(restURL);
            sb.append(scriptQuery.getQuery(container));
            sb.append("\n");
            sb.append(scriptQuery.getDefinition(container));
            sb.append("\n");
        }
        return sb.toString();
    }

}
