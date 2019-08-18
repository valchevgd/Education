import java.util.*;
import java.util.stream.Collectors;

public class P10_Courses {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        String line = scanner.nextLine();

        Map<String, Integer> courses = new LinkedHashMap<>();
        Map<String, List<String>> students = new LinkedHashMap<>();

        while (!"end".equals(line)) {

            String[] tokens = line.split(" : ");

            String course = tokens[0];
            String student = tokens[1];

            courses.putIfAbsent(course, 0);
            courses.put(course, courses.get(course) + 1);

            students.putIfAbsent(course, new ArrayList<>());
            students.get(course).add(student);

            line = scanner.nextLine();
        }

        Map<String, Integer> sorted = sortedCourses(courses);

        for (Map.Entry<String, Integer> entry : sorted.entrySet()) {

            System.out.printf("%s: %d%n", entry.getKey(), entry.getValue());

            for (String student : students.get(entry.getKey()).stream().sorted().collect(Collectors.toList())) {

                System.out.printf("-- %s%n", student);

            }

        }

    }

    private static Map<String, Integer> sortedCourses(Map<String, Integer> courses) {

        return courses
                .entrySet()
                .stream()
                .sorted(Map.Entry.comparingByValue(Comparator.reverseOrder()))
                .collect(Collectors.toMap(
                        Map.Entry::getKey,
                        Map.Entry::getValue,
                        (oldValue, newValue) -> oldValue, LinkedHashMap::new));
    }
}
