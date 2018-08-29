using System;
using System.Collections.Generic;

namespace P03_UnicodeCharacters
{
    class Program
    {
        static void Main(string[] args)
        {
            char[] input = Console.ReadLine().ToCharArray();
            List<string> result = new List<string>();

            foreach (var chars in input)
            {
                Console.Write("\\u{0:x4}", Convert.ToUInt16(chars));
            }
            Console.WriteLine();
        }
    }
}
