using System;
using System.Collections.Generic;
using System.Linq;

namespace P02_KaminoFactory
{
    class Program
    {
        static void Main(string[] args)
        {
            int sequencesLenght = int.Parse(Console.ReadLine());

            string line = Console.ReadLine();

            int leftmostIndex = 0;
            int bestSumOfOnes = 0;
            int[] bestDNA = new int[sequencesLenght];
            int longestSubsequenceOfOnes = 0;
            int bestDNASample = 0;
            int sampleCounter = 0;

            while (line != "Clone them!")
            {
                sampleCounter++;

                int[] DNA = line
                    .Split('!', StringSplitOptions.RemoveEmptyEntries)
                    .Select(int.Parse)
                    .ToArray();

                int startIndexOfSequences = 0;
                int bestStartIndex = 0;
                int bestLenght = 0;
                int totalSumOfOnes = 0;

                for (int i = 0; i < DNA.Length; i++)
                {
                    int startingIndex = 0;
                    int lenght = 0;
                    int sumOfOnes = 0;

                    if (i + sequencesLenght > DNA.Length)
                    {
                        break;
                    }

                    for (int j = i; j < sequencesLenght; j++)
                    {
                        if (DNA[j] == 1 && lenght == 0)
                        {
                            startingIndex = j;
                            lenght++;
                            sumOfOnes++;
                        }
                        else if (DNA[j] == 1 && lenght != 0)
                        {
                            lenght++;
                            sumOfOnes++;
                            if (lenght > bestLenght)
                            {
                                bestLenght = lenght;
                                bestStartIndex = startingIndex;
                                startIndexOfSequences = i;

                            }
                        }
                        else if (DNA[j] == 0)
                        {

                            lenght = 0;

                        }

                    }

                    totalSumOfOnes = sumOfOnes;



                }

                if (bestLenght > longestSubsequenceOfOnes)
                {
                    int index = 0;
                    for (int i = startIndexOfSequences; i < startIndexOfSequences + sequencesLenght; i++)
                    {
                        bestDNA[index] = DNA[i];
                        index++;
                        
                    }

                    longestSubsequenceOfOnes = bestLenght;
                    leftmostIndex = bestStartIndex;
                    bestDNASample = sampleCounter;
                    bestSumOfOnes = totalSumOfOnes;

                }
                else if (bestLenght == longestSubsequenceOfOnes && leftmostIndex > bestStartIndex)
                {

                    int index = 0;
                    for (int i = startIndexOfSequences; i < startIndexOfSequences + sequencesLenght; i++)
                    {
                        bestDNA[index] = DNA[i];
                        index++;
                       
                    }

                    leftmostIndex = bestStartIndex;
                    bestDNASample = sampleCounter;
                    bestSumOfOnes = totalSumOfOnes;

                }
                else if (bestLenght == longestSubsequenceOfOnes && leftmostIndex == bestStartIndex && totalSumOfOnes > bestSumOfOnes)
                {
                    int index = 0;
                    for (int i = startIndexOfSequences; i < startIndexOfSequences + sequencesLenght; i++)
                    {
                        bestDNA[index] = DNA[i];
                        index++;
                       
                    }

                    bestDNASample = sampleCounter;
                    bestSumOfOnes = totalSumOfOnes;
                }

                line = Console.ReadLine();
            }

            Console.WriteLine($"Best DNA sample {bestDNASample} with sum: {bestSumOfOnes}.");
            Console.WriteLine(string.Join(" ", bestDNA));

        }
    }
}
