using System;

namespace P06_StringsAndObjects
{
    class Program
    {
        static void Main(string[] args)
        {
            string firstWord = Console.ReadLine();
            string secondWord = Console.ReadLine();

            object text = firstWord + " " + secondWord;
            string newText = (string)text;

            Console.WriteLine(newText);
        }
    }
}
