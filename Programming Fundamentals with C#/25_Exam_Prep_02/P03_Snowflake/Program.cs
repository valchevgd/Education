using System;
using System.Text.RegularExpressions;

namespace P03_Snowflake
{
    class Program
    {
        static void Main(string[] args)
        {
            string surfacePattern = @"^[^a-zA-z0-9]*$";
            string mantlePattern = @"^[\d_]*$";
            string corePattern = @"^[^a-zA-z]*[\d_]*([a-zA-z]+)[\d_]*[^a-zA-z]*$";
            int lenght = 0;

            bool isValid = true;

            string upperSurface = Console.ReadLine();
            Match match = Regex.Match(upperSurface, surfacePattern);
            if (match.Success == false)
            {
                isValid = false;
            }

            string upperMantle = Console.ReadLine();
            match = Regex.Match(upperMantle, mantlePattern);
            if (match.Success == false)
            {
                isValid = false;
            }

            string core = Console.ReadLine();
            match = Regex.Match(core, corePattern);
            if (match.Success == false)
            {
                isValid = false;
            }
            lenght = match.Groups[1].Length;

            string downMantle = Console.ReadLine();
            match = Regex.Match(downMantle, mantlePattern);
            if (match.Success == false)
            {
                isValid = false;
            }

            string downSurface = Console.ReadLine();
            match = Regex.Match(downSurface, surfacePattern);
            if (match.Success == false)
            {
                isValid = false;
            }

            if (isValid)
            {
                Console.WriteLine("Valid");
                Console.WriteLine(lenght);
            }
            else
            {
                Console.WriteLine("Invalid");
            }
        }
    }
}
