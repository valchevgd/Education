using System;

namespace P13_DecryptingMessage
{
    class Program
    {
        static void Main(string[] args)
        {
            int key = int.Parse(Console.ReadLine());
            int num = int.Parse(Console.ReadLine());

            string text = "";

            for (int i = 0; i < num; i++)
            {
                char nextChar = char.Parse(Console.ReadLine());
                int newInt = nextChar + key;
                char newChar = (char)newInt;
                text += newChar;
            }

            Console.WriteLine(text);
        }
    }
}
