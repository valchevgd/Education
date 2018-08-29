using System;

namespace P06_ReverseArrayOfStrings
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();
            string[] arr = input.Split();
            arr = ReverceString(arr);

            Console.WriteLine(string.Join(" ", arr));
        }

        private static string[] ReverceString(string[] arr)
        {
            for (int index = 0; index < arr.Length / 2; index++)
            {
                string temp = arr[index];
                arr[index] = arr[arr.Length - 1 - index];
                arr[arr.Length - 1 - index] = temp;
            }

            return arr;
        }
    }
}
