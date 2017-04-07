/*
 * Released under the MIT/X11 License.
 *
 * Copyright (c) 2017 Zbynek Ruzicka
 *
 * You should have received a copy of the License along with this project in the project root.
 */

package cz.zr.toff.generator;

import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;

public class Utils {

    /** Preferred date format. */
    public static final SimpleDateFormat DATE = new SimpleDateFormat("yyyyMMdd");

    /** Preferred date format. */
    public static final SimpleDateFormat DATETIME = new SimpleDateFormat("yyyyMMdd-HHmmss");

    public static Date addDays(Date date, int days) {
        Calendar c = Calendar.getInstance();
        c.setTime(date);
        c.add(Calendar.DATE, days);
        return c.getTime();
    }
}
