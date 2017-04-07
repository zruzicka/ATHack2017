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
import cz.zr.toff.generator.model.Model;
import cz.zr.toff.generator.model.QueryContainer;

public class HardcodedScenario implements Scenario {

    public List<QueryContainer> getModels() {
        List<QueryContainer> models = new ArrayList();
        List<Definition> definitions = new ArrayList();
        try {
            add(definitions, new Definition("VIE", "BKK", 1,10, Utils.DATE.parse("20170915"), 50));
            add(definitions, new Definition("VIE", "BKK", 1,10, new Date(), 50));
            add(definitions, new Definition("PRG", "BKK", 1,10, new Date(), 50));
            add(definitions, new Definition("VIE", "PBM", 1,10, new Date(), 10));
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

    private <M> void add(List models, M model) {
        models.add(model);
    }

}
