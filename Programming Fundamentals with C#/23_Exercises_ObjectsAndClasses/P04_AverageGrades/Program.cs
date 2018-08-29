using System;
using System.Collections.Generic;
using System.Linq;

namespace P04_AverageGrades
{
    class Program
    {
        static void Main(string[] args)
        {
            int n = int.Parse(Console.ReadLine());
            List<Student> students = new List<Student>();

            for (int i = 0; i < n; i++)
            {
                string[] tokens = Console.ReadLine()
                    .Split();

                string studentName = tokens[0];
                double[] grades = new double[tokens.Length - 1];

                for (int j = 1; j < tokens.Length; j++)
                {
                    grades[j - 1] = double.Parse(tokens[j]);
                }

                students.Add(new Student(studentName, grades));
            }

            List<Student> averageStudents =students
                .Where(s => s.AverageGread >= 5.00)
                .OrderBy(s => s.Name)
                .ThenByDescending(s => s.AverageGread)
                .ToList();

            foreach (var student in averageStudents)
            {
                Console.WriteLine($"{student.Name} -> {student.AverageGread:f2}");
            }
        }
    }

    class Student
    {
        public Student(string name, double[] grade)
        {
            this.Name = name;
            this.Grades = grade;
            this.AverageGread = grade.Average();
        }

        public string Name { get; set; }

        public double[] Grades { get; set; }

        public double AverageGread { get; set; }

        
    }
}
