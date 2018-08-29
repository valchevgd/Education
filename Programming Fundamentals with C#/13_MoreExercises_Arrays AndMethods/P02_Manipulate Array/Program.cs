using System;
using System.Linq;

namespace P02_Manipulate_Array
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] input = Console.ReadLine()
                .Split();
            int count = int.Parse(Console.ReadLine());

            for (int i = 0; i < count; i++)
            {
                string[] tokens = Console.ReadLine()
                    .Split();

                string comand = tokens[0];

                if ("Reverse" == comand)
                {
                    input = ReverceTheArray(input);
                }

                if ("Distinct" == comand)
                {
                    input = DeletaNonUnique(input);
                }

                if ("Replace" == comand)
                {
                    int index = int.Parse(tokens[1]);
                    string newString = tokens[2];

                    input[index] = newString;
                }
            }

            Console.WriteLine(string.Join(", ", input));
        }

        private static string[] DeletaNonUnique(string[] input)
        {
            string temp = "";

            for (int i = input.Length - 1; i >= 0; i--)
            {

                bool isUnique = true;
                for (int j = input.Length - 1 - i; j <= 0; j--)
                {
                    if (input[input.Length - 1 - i] == input[j])
                    {
                        isUnique = false;
                        break;
                    }
                }

                if (isUnique)
                {
                    temp += input[i];
                    temp += " ";
                }
            }
            string[] arr = temp
                .TrimEnd()
                .Split()
                .ToArray();
            return arr;
        }

        private static string[] ReverceTheArray(string[] input)
        {
            string[] arr = new string[input.Length];

            for (int i = 0; i < input.Length; i++)
            {
                arr[i] = input[input.Length - 1 - i];
            }

            return arr;
        }
    }
}
