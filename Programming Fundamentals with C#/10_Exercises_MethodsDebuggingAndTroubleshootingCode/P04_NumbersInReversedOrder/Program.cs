using System;

namespace P04_NumbersInReversedOrder
{
    class Program
    {
        static void Main(string[] args)
        {
            decimal input = decimal.Parse(Console.ReadLine());
            string decimalToStr = ConvertDecimalToString(input);
            string reversed = RevirceString(decimalToStr);
            Console.WriteLine(reversed);
        }

        private static string RevirceString(string text)
        {
            char[] textToRevirce = text.ToCharArray();
            string revercedText = "";

            for (int i = textToRevirce.Length - 1; i >= 0 ; i--)
            {
                revercedText += textToRevirce[i];
            }
            return revercedText;
        }

        private static string ConvertDecimalToString(decimal number)
        {
            string decToStr = number.ToString();
            return decToStr;
        }
    }
}
