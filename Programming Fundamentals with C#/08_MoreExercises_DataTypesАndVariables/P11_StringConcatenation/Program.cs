using System;

namespace P11_StringConcatenation
{
    class Program
    {
        static void Main(string[] args)
        {
            char delimiter = char.Parse(Console.ReadLine());
            string oddOrEven = Console.ReadLine();
            int num = int.Parse(Console.ReadLine());

            string text = "";

            for (int i = 1; i <= num; i++)
            {
                string nextText = Console.ReadLine();

                if ("odd" == oddOrEven && i % 2 != 0)
                {
                    text += nextText + delimiter;
                }
                else if ("even" == oddOrEven && i % 2 == 0)
                {
                    text += nextText + delimiter;
                }
            }

            text = text.Remove(text.Length - 1);

            Console.WriteLine(text);
        }
    }
}
