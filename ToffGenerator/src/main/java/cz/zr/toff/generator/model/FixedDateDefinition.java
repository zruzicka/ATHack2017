package cz.zr.toff.generator.model;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Date;
import java.util.List;

public class FixedDateDefinition implements Definition {

	private final String from;
	private final String to;
	private Date start;
	private Date end;

	public FixedDateDefinition(String from, String to, Date start, Date end) {
		this.from = from;
		this.to = to;
		this.start = start;
		this.end = end;
	}

	@Override
	public List<Model> getModels() {
		Model[] models = new Model[] {new Model(from, to, start, end)};
		return new ArrayList<>(Arrays.asList(models));
	}

}
