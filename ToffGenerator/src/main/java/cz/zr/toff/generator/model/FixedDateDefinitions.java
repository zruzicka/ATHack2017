package cz.zr.toff.generator.model;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

public class FixedDateDefinitions implements Definition {

	private final String[] sources;
	private final String[] destinations;
	private Date[] starts;
	private Date[] ends;

	public FixedDateDefinitions(String[] from, String[] to, Date[] start, Date[] end) {
		this.sources = from;
		this.destinations = to;
		this.starts = start;
		this.ends = end;
	}

	@Override
	public List<Model> getModels() {
		List<Model> result = new ArrayList<>();
		for (String from : sources) {
			for (String target : destinations) {
				for (Date start : starts) {
					for (Date end : ends) {
						result.add(new Model(from, target, start, end));
					}
				}
			}
		}
		return result;
	}

}
