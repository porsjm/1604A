
using namespace std;

class Solution {
public:
bool FindNumsWithSum(int data[], int length, int sum, int *num1, int *num2) {
if (data == NULL || length <= 1) {
return false;
}
unsigned int head = 0;
    unsigned int tail = length -1;
    while (head != tail) {
        if (data[head]+data[tail] == sum) {
            *num1 = data[head];
            *num2 = data[tail];
            return true;

        }
        else if (data[head]+data[tail] > sum) {
            tail--;
        }
        else {
            head++;
        }
    }
    return false;
  }
};

int main(int argc, char const *argv[]) {
    int arr[6]= {1,2,4,7,12,15};
  const int length = sizeof(arr)/sizeof(arr[0]);
  int *num1 = new int;
  int *num2 = new int;
  Solution s;
  bool result = s.FindNumsWithSum(arr, length, 15, num1, num2);
  std::cout << result << std::endl;
  std::cout << *num1 << " "<< *num2<< std::endl;
  delete num1;
  delete num2;
  return 0;
}
?>