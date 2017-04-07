/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.generator.query;

import cz.zr.toff.generator.model.Model;

public class RESTQuery implements Query<Model> {

    public String getQuery(Model model) {
        StringBuilder sb = new StringBuilder();
        sb.append("http://partners.api.skyscanner.net/apiservices/browsequotes/v1.0/CZ/CZK/CZ/");
        sb.append(model.getFrom());
        sb.append("/");
        sb.append(model.getTo());
        sb.append("/");
        sb.append(model.getStart());
        sb.append("/");
        sb.append(model.getEnd());
        sb.append("?apiKey=at357056737124519290123956426147");
        // http://partners.api.skyscanner.net/apiservices/browsequotes/v1.0/CZ/CZK/CZ/PRG/BKK/170407?apiKey=at357056737124519290123956426147
        return sb.toString();
    }

}
