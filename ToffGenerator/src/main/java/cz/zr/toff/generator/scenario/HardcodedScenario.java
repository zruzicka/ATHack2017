/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.generator.scenario;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import cz.zr.toff.generator.model.Model;
import cz.zr.toff.generator.model.QueryContainer;

public class HardcodedScenario implements Scenario {

    public List<QueryContainer> getModels() {
        List<QueryContainer> models = new ArrayList();
        add(models, new QueryContainer(new Model("PRG", "BKK", 1, new Date(), new Date())));
        add(models, new QueryContainer(new Model("VIE", "BKK", 1, new Date(), new Date())));
        add(models, new QueryContainer(new Model("VIE", "PBM", 1, new Date(), new Date())));
        return models;
    }

    private void add(List<QueryContainer> models, QueryContainer model) {
        models.add(model);
    }

}
