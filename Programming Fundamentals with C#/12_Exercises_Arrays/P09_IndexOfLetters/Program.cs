using System;
using System.Linq;

namespace P09_IndexOfLetters
{
    class Program
    {
        static void Main(string[] args)
        {
            char[] nums = Console.ReadLine().ToArray();
            char[] alphabet = new char[26];

            int index = 0;
            for (char i = 'a'; i <= 'z'; i++)
            {
                alphabet[index] = i;

                index++;
            }

            for (int i = 0; i < nums.Length; i++)
            {
                for (int j = 0; j < alphabet.Length; j++)
                {
                    if (nums[i] == alphabet[j])
                    {
                        Console.WriteLine($"{nums[i]} -> {j}");
                    }
                }
            }

              
        }
    }
}
