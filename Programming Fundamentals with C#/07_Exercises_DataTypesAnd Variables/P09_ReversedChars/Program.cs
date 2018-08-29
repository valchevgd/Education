using System;

namespace P09_ReversedChars
{
    class Program
    {
        static void Main(string[] args)
        {
            char firstChar = char.Parse(Console.ReadLine());
            char secondChar = char.Parse(Console.ReadLine());
            char thirthChar = char.Parse(Console.ReadLine());

            Console.WriteLine($"{thirthChar}{secondChar}{firstChar}");
        }
    }
}
