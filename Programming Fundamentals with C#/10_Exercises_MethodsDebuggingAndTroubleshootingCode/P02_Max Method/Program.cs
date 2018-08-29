using System;

namespace P02_Max_Method
{
    class Program
    {
        static void Main(string[] args)
        {
            int firstInt = int.Parse(Console.ReadLine());
            int secondtInt = int.Parse(Console.ReadLine());
            int thirdInt = int.Parse(Console.ReadLine());

            int max = GetMax(firstInt, secondtInt);
            max = GetMax(max, thirdInt);

            Console.WriteLine(max);
        }

        private static int GetMax(int firstInt, int secondtInt)
        {
            int max = 0;

            if (firstInt >= secondtInt)
            {
                max = firstInt;
            }
            else
            {
                max = secondtInt;
            }

            return max;
        }
    }
}
