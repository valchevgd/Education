using System;

namespace P13_VowelOrDigit
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();

            int num = 0;
            bool isDigit = int.TryParse(input,out num);

            if (isDigit)
            {
                Console.WriteLine("digit");
            }
            else if (true)
            {
                switch (input)
                {
                    case "a":
                    case "e":
                    case "i":
                    case "o":
                    case "u":
                    case "y":
                        Console.WriteLine("vowel");
                        break;
                    default:
                        Console.WriteLine("other");
                        break;
                }
            }
        }
    }
}
