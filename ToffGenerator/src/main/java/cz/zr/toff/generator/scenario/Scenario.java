/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.generator.scenario;

import java.util.List;

import cz.zr.toff.generator.model.QueryContainer;

public interface Scenario {

    List<QueryContainer> getModels();
    
}
