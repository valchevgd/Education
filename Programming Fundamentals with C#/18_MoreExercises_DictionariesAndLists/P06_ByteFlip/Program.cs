using System;
using System.Collections.Generic;
using System.Linq;

namespace P06_ByteFlip
{
    class Program
    {
        private static string hexValue;

        static void Main(string[] args)
        {
            List<string> input = Console.ReadLine()
               .Split()
               .Reverse()
               .ToList();

            input.RemoveAll(x => x.Length != 2);

            for (int i = 0; i < input.Count; i++)
            {
                char[] temp = input[i].ToCharArray();
                Array.Reverse(temp);
                input.RemoveAt(i);
                string newString = new string(temp);
                input.Insert(i, newString);
            }


            foreach (var hex in input)
            {
                int decValue = int.Parse(hex, System.Globalization.NumberStyles.HexNumber);
                Console.Write((char)decValue);
            }

            Console.WriteLine();
        }
    }
}
