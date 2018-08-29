using System;

namespace P07_SumArrays
{
    class Program
    {
        static void Main(string[] args)
        {
            string first = Console.ReadLine();
            string second = Console.ReadLine();

            string[] splitFirst = first.Split();
            string[] splitSecond = second.Split();

            int[] firstArr = MakeIntFromString(splitFirst);
            int[] secondArr = MakeIntFromString(splitSecond);

            if (firstArr.Length > secondArr.Length)
            {
                secondArr = MakeEqualsLenght(firstArr, secondArr);
            }
            else if (firstArr.Length < secondArr.Length)
            {
                firstArr = MakeEqualsLenght(secondArr, firstArr);
            }

            int[] totalSum = CalculateSumOfTwo(firstArr, secondArr);

            Console.WriteLine(string.Join(" ", totalSum));

        }

        private static int[] CalculateSumOfTwo(int[] firstArr, int[] secondArr)
        {
            int[] total = new int[firstArr.Length];

            for (int index = 0; index < total.Length; index++)
            {
                total[index] = firstArr[index] + secondArr[index];
            }

            return total;
        }

        private static int[] MakeEqualsLenght(int[] firstArr, int[] secondArr)
        {
            int secondIndex = 0;
            int[] newArr = new int[firstArr.Length];
            for (int index = 0; index < newArr.Length; index++)
            {


                if (secondIndex > secondArr.Length - 1)
                {
                    secondIndex = 0;
                }

                newArr[index] = secondArr[secondIndex];

                secondIndex++;


            }

            return newArr;
        }

        private static int[] MakeIntFromString(string[] splitFirst)
        {
            int[] newArr = new int[splitFirst.Length];

            for (int index = 0; index < newArr.Length; index++)
            {
                newArr[index] = int.Parse(splitFirst[index]);
            }

            return newArr;

        }
    }
}
