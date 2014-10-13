
git config --global user.name ="caiwang"
git config --global user.email ="1151104844@qq.com"

ssh-keygen -C '1151104844@qq.com' -t rsa
cat ~/.ssh/id_rsa.pub

copy&paste public key into github


in /meida/ihostdata/prog

=== git clone ===

git clone git@github.com:unissoft-bj/microhr

git clone git@github.com:unissoft-bj/microma


=== git push ===
git add -A
git commit -m "your message"
git push

=== collision ===
# 如果不同的人修改了不同的位置，不会冲突
# 如果不同的人修改了同一行，则会引起冲突

# 强制推送，覆盖远程分支
git push -u origin master -f 

# 先做pull,git会尝试把远程分支内容与本地分支合并
git pull

# 如果有冲突，查看冲突
git status
# 手工解决，修改冲突内容
git add -A
git commit -m "your message"
git push

###
