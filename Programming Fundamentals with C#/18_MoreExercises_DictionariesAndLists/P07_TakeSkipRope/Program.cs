using System;
using System.Collections.Generic;
using System.Linq;

namespace P07_TakeSkipRope
{
    class Program
    {
        static void Main(string[] args)
        {
            char[] input = Console.ReadLine().ToCharArray();

            List<int> numbersList = new List<int>();
            List<char> nonNumbersList = new List<char>();

            foreach (var item in input)
            {
                if (item >= '0' && item <= '9')
                {
                    numbersList.Add((int)item - 48);
                }
                else
                {
                    nonNumbersList.Add(item);
                }
            }

            List<int> takeList = new List<int>();
            List<int> skipList = new List<int>();

            for (int i = 0; i < numbersList.Count; i++)
            {
                if (i % 2 == 0)
                {
                    takeList.Add(numbersList[i]);
                }
                else
                {
                    skipList.Add(numbersList[i]);
                }
            }


            string result = "";

            int skipIndex = 0;
            for (int i = 0; i < takeList.Count; i++)
            {
                char[] nonNumbers = nonNumbersList.Skip(skipIndex).Take(takeList[i]).ToArray();
                string temp = new string(nonNumbers);
                result += temp;
                skipIndex += (skipList[i] + takeList[i]);
            }

            Console.WriteLine(result);
        }
    }
}
