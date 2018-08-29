using System;

namespace P04_VariableInHexFormat
{
    class Program
    {
        static void Main(string[] args)
        {
            string num = Console.ReadLine();

            int integerNum = Convert.ToInt32(num, 16);

            Console.WriteLine(integerNum);
        }
    }
}
