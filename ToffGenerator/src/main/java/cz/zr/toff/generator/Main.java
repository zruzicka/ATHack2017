/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.generator;

import cz.zr.toff.generator.scenario.HardcodedScenario;

public class Main {

    public static void main(String[] args) {
        ScriptGenerator generator = new ScriptGenerator();
        String output = generator.generate(new HardcodedScenario());
        System.out.println(output);
    }

}
