using System;
using System.Linq;

namespace P01_ReverseString
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();
            string reversed = new string (input.Reverse().ToArray());

            Console.WriteLine(reversed);
        }
    }
}
