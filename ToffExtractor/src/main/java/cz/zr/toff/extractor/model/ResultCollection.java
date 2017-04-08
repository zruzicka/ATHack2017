/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.extractor.model;

import java.util.ArrayList;
import java.util.Collections;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.Set;

import cz.zr.toff.extractor.Utils;

public class ResultCollection {

    Map<String, Map> results = new HashMap();
    
    public void add(Result result) {
        String key = Utils.DATE.format(result.getStart());
        Map item = results.get(key);
        boolean containsKey = results.containsKey(key);
        if (!containsKey) {
            updateResultItem(key, result);
        } else {
            Integer price = (Integer) item.get("value");
            if (price > result.getPrice()) {
                updateResultItem(key, result);
            }
        }
    }
    
    public Map<String, Map> getResults() {
        return results;
    }
    
    public List<Map> getSortedResults() {
        List<Map> finalResults = new ArrayList();
        List<String> keys = new ArrayList();
        Set<String> keySet = results.keySet();
        for (String string : keySet) {
            keys.add(string);
        }
        Collections.sort(keys);
        for (String key : keys) {
            Map map = results.get(key);
            finalResults.add(map);
        }
        return finalResults;
    }

    private void updateResultItem(String key, Result result) {
        Map item;
        item = new HashMap();
        item.put("date", key);
        item.put("value", result.getPrice());
        results.put(key, item);
    }
    
}
