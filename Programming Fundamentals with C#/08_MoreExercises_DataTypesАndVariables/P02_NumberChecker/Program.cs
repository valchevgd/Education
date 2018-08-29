using System;

namespace P02_NumberChecker
{
    class Program
    {
        static void Main(string[] args)
        {
            string num = Console.ReadLine();

            long isinteger = 0;
            bool isInt = long.TryParse(num, out isinteger);

            if (isInt)
            {
                Console.WriteLine("integer");
            }
            else
            {
                Console.WriteLine("floating-point");
            }
        }
    }
}
