using System;

namespace P01_SoftUniReception
{
    class Program
    {
        static void Main(string[] args)
        {
            int firstEmpolyee = int.Parse(Console.ReadLine());
            int secondEmpolyee = int.Parse(Console.ReadLine());
            int thirdEmpolyee = int.Parse(Console.ReadLine());

            int totalStudentsPerHour = firstEmpolyee + secondEmpolyee + thirdEmpolyee;

            int totalStudents = int.Parse(Console.ReadLine());
            int totalTime = 0;
            int conuter = 0;

            while (totalStudents > 0)
            {
                totalStudents -= totalStudentsPerHour;
                totalTime++;
                if (totalStudents <= 0)
                {
                    break;
                }
                conuter++;
                if (conuter % 3 == 0)
                {
                    totalTime++;
                }
            }

            Console.WriteLine($"Time needed: {totalTime}h.");
        }
    }
}
