using System;

namespace P05_RoundingNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();
            double[] arr = ConvertToDouble(input);
            int[] rounded = RoundetAwayFromZero(arr);

            for (int index = 0; index < rounded.Length; index++)
            {
                Console.WriteLine($"{arr[index]} => {rounded[index]}");
            }
        }

        private static int[] RoundetAwayFromZero(double[] arr)
        {
            int[] intArr = new int[arr.Length];
            for (int index = 0; index < arr.Length; index++)
            {
                intArr[index] =(int) Math.Round(arr[index], MidpointRounding.AwayFromZero);
            }

            return intArr;
        }

        private static double[] ConvertToDouble(string input)
        {
            string[] deletedSpaces = input.Split(' ');
            double[] arr = new double[deletedSpaces.Length];

            for (int index = 0; index < arr.Length; index++)
            {
                arr[index] = double.Parse(deletedSpaces[index]);
            }

            return arr;
        }
    }
}
