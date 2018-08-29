using System;

namespace P14__IntegerToHexAndBinary
{
    class Program
    {
        static void Main(string[] args)
        {
            int integer = int.Parse(Console.ReadLine());

            string hexadecimal = Convert.ToString(integer, 16);
            string binary = Convert.ToString(integer, 2);

            Console.WriteLine(hexadecimal.ToUpper());
            Console.WriteLine(binary.ToUpper());
        }
    }
}
