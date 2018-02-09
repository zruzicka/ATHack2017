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
import cz.zr.toff.generator.model.PeriodDefinition;
import cz.zr.toff.generator.model.Model;
import cz.zr.toff.generator.model.QueryContainer;

public class HardcodedPeriodicScenario implements Scenario {

    public List<QueryContainer> getModels() {
        List<QueryContainer> models = new ArrayList();
        List<PeriodDefinition> definitions = new ArrayList();
        try {
            add(definitions, new PeriodDefinition("VIE", "BKK", 10,15, Utils.DATE.parse("20170915"), 30));
            add(definitions, new PeriodDefinition("VIE", "BKK", 10,15, new Date(), 30));
            add(definitions, new PeriodDefinition("PRG", "BKK", 10,15, new Date(), 30));
            add(definitions, new PeriodDefinition("VIE", "PBM", 10,15, new Date(), 15));
        } catch (ParseException e) {
            e.printStackTrace();
        }
        
        for (PeriodDefinition definition : definitions) {
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
