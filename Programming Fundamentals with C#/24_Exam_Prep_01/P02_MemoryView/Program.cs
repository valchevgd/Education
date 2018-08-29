using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace P02_MemoryView
{
    class Program
    {
        static void Main(string[] args)
        {
            string input = Console.ReadLine();
            string fullMemory ="";

            while (input != "Visual Studio crash")
            {
                List<int> pesho = input
                    .Split()
                    .Select(int.Parse)
                    .ToList();

                pesho.RemoveAll(x => x <= 0 || x > 127);

                for (int i = 0; i < pesho.Count; i++)
                {
                    fullMemory+= pesho[i].ToString() + " ";
                }

                input = Console.ReadLine();
            }

            //string total = fullMemory.ToString();

            List<int> chars = fullMemory
                .Split(' ', StringSplitOptions.RemoveEmptyEntries)
                .Select(int.Parse)
                .ToList();

            List<string> words = new List<string>();

            while (chars.Count != 0)
            {
                string temp = "";
                int index = chars[0];
                for (int i = 1; i <= index; i++)
                {
                    temp += (char)chars[i];
                }
                words.Add(temp);
                chars.RemoveRange(0, index + 1);
            }

            foreach (var word in words)
            {
                Console.WriteLine(word);
            }
        }
    }
}
