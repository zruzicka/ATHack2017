/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.generator.model;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

import cz.zr.toff.generator.Utils;

public class Definition {

    private final String from;
    private final String to;
    private final int queryPeriod;
    private final int returnOffset;
    private Date start;
    private final int modelsAmount;

    public Definition(String from, String to, int queryPeriod, int returnOffset, Date start, int modelsAmount) {
        super();
        this.from = from;
        this.to = to;
        this.queryPeriod = queryPeriod;
        this.returnOffset = returnOffset;
        this.start = start;
        this.modelsAmount = modelsAmount;
    }

    public List<Model> getModels() {
        List<Model> models = new ArrayList();
        Date modelStart = start;
        for (int i = 0; i < modelsAmount; i++) {
            Date modelEnd = Utils.addDays(modelStart, returnOffset);
            add(models, new Model(from, to, modelStart, modelEnd));
            modelStart = Utils.addDays(modelStart, queryPeriod);
        }
        return models;
    }

    private void add(List<Model> models, Model model) {
        models.add(model);
    }

}
