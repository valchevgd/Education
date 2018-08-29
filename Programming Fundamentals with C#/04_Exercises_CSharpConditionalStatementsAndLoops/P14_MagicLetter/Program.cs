using System;

namespace P14_MagicLetter
{
    class Program
    {
        static void Main(string[] args)
        {
            char firstChar = char.Parse(Console.ReadLine());
            char secondChar = char.Parse(Console.ReadLine());
            char thirdChar = char.Parse(Console.ReadLine());

            for (int i = firstChar; i <= secondChar; i++)
            {
                for (int j = firstChar; j <= secondChar; j++)
                {
                    for (int k = firstChar; k <= secondChar; k++)
                    {
                        if (i == thirdChar || j == thirdChar || k == thirdChar)
                        {
                            continue;
                        }
                        else
                        {
                            Console.Write($"{(char)i}{(char)j}{(char)k} ");
                        }

                        
                    }
                }
            }
        }
    }
}
