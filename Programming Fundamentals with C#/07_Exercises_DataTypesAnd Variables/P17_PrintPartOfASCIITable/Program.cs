using System;

namespace P17_PrintPartOfASCIITable
{
    class Program
    {
        static void Main(string[] args)
        {
            int firstInt = int.Parse(Console.ReadLine());
            int lastInt = int.Parse(Console.ReadLine());

            for (int i = firstInt; i <= lastInt; i++)
            {
                Console.Write((char)i + " ");
            }
        }
    }
}
