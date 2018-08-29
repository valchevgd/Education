using System;

namespace P03_FoldAndSum
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();
            int[] fullArr = ConvertToInt(input);
            int k = fullArr.Length / 4;
            int[] firstKNums = GetFirstKNums(fullArr, k);
            int[] lastKNums = GetLastKNums(fullArr, k);
            int[] firstRow = GetMiddleNums(fullArr, k);
            int[] secondRow = MakeSecondRow(firstKNums, lastKNums);
            int[] sum = CalculateSum(firstRow, secondRow);

            Console.WriteLine(string.Join(" ", sum));
        }

        private static int[] CalculateSum(int[] firstRow, int[] secondRow)
        {

            int[] sum = new int[firstRow.Length];

            for (int index = 0; index < sum.Length; index++)
            {
                sum[index] = firstRow[index] + secondRow[index];
            }

            return sum;
        }

        private static int[] MakeSecondRow(int[] firstKNums, int[] lastKNums)
        {
            int[] reverseFirst = new int[firstKNums.Length];
            int newIndex = 0;
            for (int index = firstKNums.Length - 1; index >= 0; index--)
            {
                reverseFirst[newIndex] = firstKNums[index];
                newIndex++;
            }

            int[] row = new int[firstKNums.Length * 2];

            for (int index = 0; index < firstKNums.Length; index++)
            {
                row[index] = reverseFirst[index];
            }

            newIndex = firstKNums.Length;
            for (int index = 0; index < lastKNums.Length; index++)
            {
                row[newIndex] = lastKNums[index];
                newIndex++;
            }

            return row;
        }

        private static int[] GetMiddleNums(int[] fullArr, int k)
        {
            int[] newArr = new int[fullArr.Length / 2];
            int newIndex = 0;
            for (int index = k; index < fullArr.Length - k; index++)
            {
                newArr[newIndex] = fullArr[index];
                newIndex++;
            }

            return newArr;
        }

        private static int[] GetLastKNums(int[] fullArr, int k)
        {
            int[] newArr = new int[k];
            int newIndex = 0;
            for (int index = fullArr.Length - 1; index >= fullArr.Length - k; index--)
            {
                newArr[newIndex] = fullArr[index];
                newIndex++;
            }
            return newArr;
        }

        private static int[] GetFirstKNums(int[] fullArr, int k)
        {
            int[] newArr = new int[k];
            for (int index = 0; index < k; index++)
            {
                newArr[index] = fullArr[index];
            }

            return newArr;
        }

        private static int[] ConvertToInt(string input)
        {
            string[] text = input.Split();
            int[] newArr = new int[text.Length];
            for (int index = 0; index < newArr.Length; index++)
            {
                newArr[index] = int.Parse(text[index]);
            }

            return newArr;
        }
    }
}
