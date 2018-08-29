using System;
using System.Linq;

namespace P05_CompareCharArrays
{
    class Program
    {
        static void Main(string[] args)
        {
            char[] firstArr = Console.ReadLine().Split().Select(char.Parse).ToArray();
            char[] secondArr = Console.ReadLine().Split().Select(char.Parse).ToArray();


            int stopIndex = Math.Min(firstArr.Length, secondArr.Length);

            for (int index = 0; index < stopIndex; index++)
            {
                if (firstArr[index] < secondArr[index])
                {
                    Console.WriteLine(firstArr);
                    Console.WriteLine(secondArr);
                    break;
                }
                if (firstArr[index] > secondArr[index])
                {
                    Console.WriteLine(secondArr);
                    Console.WriteLine(firstArr);
                    break;
                }
                if (firstArr[stopIndex - 1] == secondArr[stopIndex - 1])
                {
                    if (firstArr.Length < secondArr.Length)
                    {
                        Console.WriteLine(firstArr);
                        Console.WriteLine(secondArr);
                        break;
                    }
                    else
                    {
                        Console.WriteLine(secondArr);
                        Console.WriteLine(firstArr);
                        break;
                    }
                }

            }
        }

    }
}
