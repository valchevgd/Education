using System;
using System.Text.RegularExpressions;

namespace P01_ExtractEmails
{
    class Program
    {
        static void Main(string[] args)
        {
            string pattern = @"\b(?<=\s)([A-Z]|[a-z]|[0-9])+([.\-\/])?([A-Z]|[a-z]|[0-9])+@[a-z]+(\-[a-z]+)?(\.[a-z]+)+\b";
            Regex regex = new Regex(pattern);

            string input = Console.ReadLine();

            MatchCollection validMails = regex.Matches(input);

            foreach (Match mail in validMails)
            {
                Console.WriteLine(mail.Value);
            }
        }
    }
}
