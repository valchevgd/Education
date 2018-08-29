using System;

namespace P08_GreaterOfTwoValues
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();

            if ("int" == input)
            {
                int first = int.Parse(Console.ReadLine());
                int second = int.Parse(Console.ReadLine());
                int max = GetMax(first, second);
                Console.WriteLine(max);
            }
            else if ("char" == input)
            {
                char first = char.Parse(Console.ReadLine());
                char second = char.Parse(Console.ReadLine());
                char max = GetMax(first, second);
                Console.WriteLine(max);
            }
            else if ("string" == input)
            {
                string first = Console.ReadLine();
                string second = Console.ReadLine();
                string max = GetMax(first, second);
                Console.WriteLine(max);
            }
        }

        static string GetMax(string first, string second)
        {
            string max = "";

            if (first.CompareTo(second) >= 0)
            {
                max = first;
            }
            else
            {
                max = second;
            }
            return max;
        }

        static int GetMax(int first, int second)
        {
            int max = 0;

            if (first >= second)
            {
                max = first;
            }
            else
            {
                max = second;
            }
            return max;
        }

        static char GetMax(char first, char second)
        {
            char max = 'a';

            if (first > second)
            {
                max = first;
            }
            else
            {
                max = second;
            }

            return max;
        }
    }
}
