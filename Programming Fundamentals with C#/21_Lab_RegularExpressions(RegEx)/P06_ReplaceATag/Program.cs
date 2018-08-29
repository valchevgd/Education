using System;
using System.Text.RegularExpressions;

namespace P06_ReplaceATag
{
    class Program
    {
        static void Main(string[] args)
        {

            while (true)
            {
                string input = Console.ReadLine();

                Regex regex = new Regex(@"(^\s+)?<a( )?href=""(.*)"">(.*)<\/a>");

                if (input == "end")
                {
                    break;
                }

                input = regex.Replace(input, @"$1[URL$2href=""$3""]$4[/URL]");

                Console.WriteLine(input);
            }
        }
    }
}
