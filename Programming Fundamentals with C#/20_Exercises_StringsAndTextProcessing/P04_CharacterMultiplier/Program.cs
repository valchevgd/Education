using System;

namespace P04_CharacterMultiplier
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] input = Console.ReadLine().Split();

            char[] firstArr = input[0].ToCharArray();
            char[] secondArr = input[1].ToCharArray();
            int stopIndex = Math.Min(firstArr.Length, secondArr.Length);
            int sum = 0;

            for (int i = 0; i < stopIndex; i++)
            {
                sum += firstArr[i] * secondArr[i];
            }

            if (firstArr.Length > secondArr.Length)
            {
                for (int i = stopIndex; i < firstArr.Length; i++)
                {
                    sum += firstArr[i];
                }
            }
            else if (secondArr.Length > firstArr.Length)
            {
                for (int i = stopIndex; i < secondArr.Length; i++)
                {
                    sum += secondArr[i];
                }
            }

            Console.WriteLine(sum);
        }
    }
}
