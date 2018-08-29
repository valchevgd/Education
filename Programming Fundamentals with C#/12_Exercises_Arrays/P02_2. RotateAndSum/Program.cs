using System;

namespace P02_RotateAndSum
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();
            int rotations = int.Parse(Console.ReadLine());

            int[] intArr = ConvertToInt(input);
            int[] sum = new int[intArr.Length];

            for (int r = 1; r <= rotations; r++)
            {
                int lastIndex = intArr[intArr.Length - 1];
                for (int index = intArr.Length - 1; index > 0; index--)
                {
                    intArr[index] = intArr[index - 1];
                }
                intArr[0] = lastIndex;

                for (int i = 0; i < intArr.Length; i++)
                {
                    sum[i] += intArr[i];
                }

            }

            Console.WriteLine(string.Join(" ", sum));
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
