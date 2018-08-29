using System;
using System.Collections.Generic;
using System.Linq;

namespace P05_MagicExchangeableWords
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] input = Console.ReadLine().Split();

            char[] firstWord = input[0].ToCharArray();
            char[] secondWord = input[1].ToCharArray();

            bool isMagic = CheckForMagicWord(firstWord, secondWord);

            Console.WriteLine(isMagic.ToString().ToLower());
        }

        private static bool CheckForMagicWord(char[] firstWord, char[] secondWord)
        {
            bool isMagic = false;

            Dictionary<char, int> uniqCharsInFirstWord = new Dictionary<char, int>();
            Dictionary<char, int> uniqCharsInSecondWord = new Dictionary<char, int>();

            foreach (var cha in firstWord)
            {
                if (uniqCharsInFirstWord.ContainsKey(cha) == false)
                {
                    uniqCharsInFirstWord.Add(cha, 1);
                }
            }

            foreach (var cha in secondWord)
            {
                if (uniqCharsInSecondWord.ContainsKey(cha) == false)
                {
                    uniqCharsInSecondWord.Add(cha, 1);
                }
            }

            if (uniqCharsInFirstWord.Values.Sum() == uniqCharsInSecondWord.Values.Sum())
            {
                isMagic = true;
            }

            return isMagic;
            
        }
    }
}
