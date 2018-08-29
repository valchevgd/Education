using System;

namespace P15_BalancedBrackets
{
    class Program
    {
        static void Main(string[] args)
        {
            int num = int.Parse(Console.ReadLine());

            int firsBrackets = 0;
            int secondBrackets = 0;

            bool balanced = true;
            string text = "";

            for (int i = 0; i < num; i++)
            {
                string nextChar = Console.ReadLine();

                if ("(" == nextChar)
                {
                    firsBrackets++;
                    text += nextChar;

                    if (text == "((")
                    {
                        balanced = false;
                        break;
                    }
                    else if (text == "()")
                    {
                        text = text.Remove(text.Length - 2, 1);
                    }
                }
                else if (")" == nextChar)
                {
                    secondBrackets++;
                    text += nextChar;

                    if (text == "))")
                    {
                        balanced = false;
                        break;
                    }
                    else if (text == "()")
                    {
                        text = text.Remove(text.Length -2, 1);
                    }
                }
            }

            if (firsBrackets != secondBrackets)
            {
                balanced = false;
            }

            if (balanced)
            {
                Console.WriteLine("BALANCED");
            }
            else
            {
                Console.WriteLine("UNBALANCED");
            }
        }
    }
}
